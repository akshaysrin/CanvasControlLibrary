using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Reflection;

namespace CanvasControlLibrary.Controllers
{
    public class CCLsController : ApiController
    {
        // POST api/ccls
        public CanvasControlLibrary.Models.CanvasControlLibrary Post([FromBody]CanvasControlLibrary.Models.CanvasControlLibrary CCL)
        {
            UserCode uc = new UserCode();
            MethodInfo mi = uc.GetType().GetMethod(CCL.FunctionName);
            mi.Invoke(uc, new Object[] { CCL });
            return CCL;
        }
    }
}
